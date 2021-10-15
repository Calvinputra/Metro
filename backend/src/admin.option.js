const db = require("../models");
const options = {
  rootPath: "/admin",
  //adjust resource
  resources: [
    {
      resource: db.menus,
      ...db.menu_items_options,
    },
    {
      resource: db.menu_items,
      ...db.menus_options,
    },
    {
      resource: db.products,
      ...db.products_options,
    },
    {
      resource: db.users,
      ...db.users_options,
    },
    {
      resource: db.categories,
      ...db.categories_options,
    },
  ],
};

module.exports = options;
