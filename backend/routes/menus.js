const router = require("express").Router();
const db = require("../models");
const Menu = db.menus;

router.get("/menu/:id", async (req, res) => {
  try {
    let menu = await Menu.findOne({
      where: { id: req.params.id },
      include: ["menu_items"],
    });

    res.json({
      menu: menu,
    });
  } catch (err) {
    res.status(500).json({
      success: false,
      message: err.message,
    });
  }
});

module.exports = router;
