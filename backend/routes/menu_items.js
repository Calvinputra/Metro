const router = require("express").Router();
const MenuItem = require("../models/menu_items.model");

router.get("/menu_items", async (req, res) =>
{
    try
    {
        let menu_items = await MenuItem.findAll();

        res.json(
            {
                menu_items : menu_items
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

module.exports = router;