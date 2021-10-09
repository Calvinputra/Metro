const dbConfig = require("../config/db.config.js");

const Sequelize = require("sequelize");
const sequelize = new Sequelize(dbConfig.DB, dbConfig.USER, dbConfig.PASSWORD, {
  host: dbConfig.HOST,
  dialect: dbConfig.dialect,
  operatorsAliases: false,
  port: dbConfig.PORT,
  pool: {
    max: dbConfig.pool.max,
    min: dbConfig.pool.min,
    acquire: dbConfig.pool.acquire,
    idle: dbConfig.pool.idle,
  },
});

const db = {};

db.Sequelize = Sequelize;
db.sequelize = sequelize;

//require model
db.tutorials = require("./tutorial.model.js")(sequelize, Sequelize);
db.menus = require("./menus.model.js")(sequelize, Sequelize);
db.menu_items = require("./menu_items.model.js")(sequelize, Sequelize);

//define relation
db.menus.hasMany(db.menu_items, { as: "menu_items",foreignKey:"menu_id" });
db.menu_items.belongsTo(db.menus, {
  foreignKey: "menu_id",
  as: "menu",
});

module.exports = db;
