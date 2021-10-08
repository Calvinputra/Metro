const router = require("express").Router();
const db = require("../models/");
const MenuItem = db.menu_items;

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