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
db.menus = require("./menus/menus.model")(sequelize, Sequelize);
db.menu_items = require("./menu_items/menu_items.model")(sequelize, Sequelize);
db.products = require("./products/products.model")(sequelize, Sequelize);
db.users = require('./users/users.model')(sequelize, Sequelize);
db.categories = require('./categories/categories.model')(sequelize, Sequelize);

//define option
db.menus_options = require('./menus/menus.options');
db.menu_items_options = require('./menu_items/menu_items.options');
db.users_options = require('./users/users.options');
db.products_options = require('./products/products.options');
db.categories_options = require('./categories/categories.options');

//define relation
db.menus.hasMany(db.menu_items, { as: "menu_items",foreignKey:"menu_id" });
db.menu_items.belongsTo(db.menus, {
  foreignKey: "menu_id",
  as: "menu",
});

module.exports = db;
