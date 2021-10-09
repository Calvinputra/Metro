const AdminBro = require('admin-bro');
const AdminBroExpress = require('@admin-bro/express');
const AdminBroSequelize = require('@admin-bro/sequelize');
const express = require('express');
const cors = require("cors");

const app = express();

//ENV NOT READ (undefined)
const dotenv = require("dotenv");
dotenv.config();

const PORT = process.env.PORT || 8080; // set port, listen for requests
//console.log("PORT ENV : "+process.env.PORT);
const db = require('./models');


//REGISTER ADAPTER
AdminBro.registerAdapter(AdminBroSequelize);


//Sync Migration (In development not recommended)
// db.sequelize.sync({ alter:true }).then(() => {
//   //console.log("Drop and re-sync db.");
// });


const adminBro = new AdminBro({
  databases: [db],
  rootPath: '/admin',
})

const router = AdminBroExpress.buildRouter(adminBro);


app.use(adminBro.options.rootPath, router)
app.use(cors());
app.use(express.json()); // parse requests of content-type - application/json
app.use(express.urlencoded({ extended: true })); // parse requests of content-type - application/x-www-form-urlencoded


// simple route
app.get("/", (req, res) => {
  res.json({ message: "Welcome to bezkoder application." });
});

//ROUTES
const menusRoute = require ("./routes/menus");

app.use("/api", menusRoute);


app.listen(PORT, () => console.log('AdminBro is under localhost:'+PORT+'/admin'))