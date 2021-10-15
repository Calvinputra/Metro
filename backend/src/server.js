const AdminBro = require("admin-bro");
const options = require("./admin.option");
const AdminBroSequelize = require("@admin-bro/sequelize");
const buildAdminRouter = require("./admin.router");
const express = require("express");

//REGISTER ADAPTER
AdminBro.registerAdapter(AdminBroSequelize);

const run = async () => {
  const app = express();
  const PORT = process.env.PORT; // set port, listen for requests
  const adminBro = new AdminBro(options);
  const menusRoute = require("../routes/menus");
  const router = buildAdminRouter(adminBro);
  const cors = require("cors");
  require("dotenv").config();

  //Sync Migration (In development not recommended)
  // db.sequelize.sync({ alter:true }).then(() => {
  //   //console.log("Drop and re-sync db.");
  // });
  app.use(adminBro.options.rootPath, router);
  app.use(cors());
  app.use(express.json()); // parse requests of content-type - application/json
  app.use(express.urlencoded({ extended: true })); // parse requests of content-type - application/x-www-form-urlencoded

  // simple route
  app.get("/", (req, res) => {
    res.json({ message: "Welcome to bezkoder application." });
  });

  //ROUTES
  app.use("/api", menusRoute);

  app.listen(PORT, () =>
    console.log("AdminBro is under localhost:" + PORT + "/admin")
  );
};

module.exports = run;
