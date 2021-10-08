const router = require("express").Router();
const Product = require("../models/product");
// POST request - Create a new Product

// title : String,
// description : String,
// price : Number,
// stockquantity : Number,
// rating : [Number]
router.post("/products", async (req, res) =>
{
    try{
        let product = new Product();
        product.title = req.body.title;
        product.description = req.body.description;
        product.photo = req.body.photo;
        product.stockquantity = req.body.stockquantity;

        await product.save(); //async

        res.json(
            {
                status : true,
                message : "Sucessfully Saved"
            });

    }catch(err)
    {
        res.status(500).json({
                success : false,
                message : err.message
            });
    }
});

// GET request - get all products

router.get("/products", async (req, res) =>
{
    try
    {
        let products = await Product.find();

        res.json(
            {
              products : products
            });
    }catch(err)
    {
        res.status(500).json(
            {
                success : false,
                message : err.message
            });
    }
});

//GET Request - get a single product

router.get("/products/:id", async (req, res) =>
{
    try
    {
        let product = await Product.findOne({ _id: req.params.id });

        res.json(
            {
              product : product
            });
    }catch(err)
    {
        res.status(500).json(
            {
                success : false,
                message : err.message
            });
    }
});


//PUT Request - Update a Single Product
router.put("/products/:id", async (req, res) =>
{
    try
    {
        let product = await Product.findOneAndUpdate({ _id: req.params.id },
            {
                $set : 
                {
                     title: req.body.title,
                     price: req.body.price,
                     category: req.body.categoryID,
                     description: req.body.description,
                     owner: req.body.ownerID
                },
            }, {upsert: true});

        res.json(
            {
              updatedProduct : product
            });
    }catch(err)
    {
        res.status(500).json(
            {
                success : false,
                message : err.message
            });
    }
});



//Delete Request - Delete a Single Product
router.delete("/products/:id", async (req, res)=>
{
    try{
        let deletedProduct = await Product.findOneAndDelete({_id: req.params.id});

        if(deletedProduct)
        {
            res.json
            ({
                status : true,
                message : "successfully deleted"
            });
        }

    }catch(err)
    {
        res.status(500).json(
            {
                success : false,
                message : err.message
            });
    }


});

module.exports = router;


