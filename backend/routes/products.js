const router = require("express").Router();
const db = require("../models");
const Product = db.products;

//TODO PAGINATION
//(B)READ - BROWSE / READ ALL
router.get("/products", async (req, res) => {
    try {
      let products = await Menu.findAll();
  
      res.json({
        products: products,
      });
    } catch (err) {
      res.status(500).json({
        success: false,
        message: err.message,
      });
    }
  });