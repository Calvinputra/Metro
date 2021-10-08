module.exports = (sequelize, Sequelize) => {
  const MenuItem = sequelize.define("menu_items", {
    id: {
      type: Sequelize.BIGINT.UNSIGNED,
      autoIncrement: true,
      primaryKey: true,
    },
    title: {
      type: Sequelize.STRING,
    },
    url: {
      type: Sequelize.STRING,
    },
    target: {
      type: Sequelize.STRING,
    },
    icon_class: {
      type: Sequelize.STRING,
    },
    color: {
      type: Sequelize.STRING,
    },
    order: {
      type: Sequelize.INTEGER,
    },
    parent_id: {
      type: Sequelize.BIGINT.UNSIGNED,
      references: {
        model: "menu_items",
        key: "id",
      },
    },
    menu_id: {
      type: Sequelize.BIGINT.UNSIGNED,
      references: {
        model: "menus",
        key: "id",
      },
    },
  });

  return MenuItem;
};
