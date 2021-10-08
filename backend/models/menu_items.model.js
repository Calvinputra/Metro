module.exports = (Sequelize, DataTypes) => {
  const MenuItem = Sequelize.define("menu_items", {
    id: {
      type: DataTypes.BIGINT.UNSIGNED,
      autoIncrement: true,
      primaryKey: true,
    },
    title: {
      type: DataTypes.STRING,
    },
    url: {
      type: DataTypes.STRING,
    },
    target: {
      type: DataTypes.STRING,
    },
    icon_class: {
      type: DataTypes.STRING,
    },
    color: {
      type: DataTypes.STRING,
    },
    order: {
      type: DataTypes.INTEGER,
    },
    parent_id: {
      type: DataTypes.BIGINT.UNSIGNED,
      references: {
        model: "menu_items",
        key: "id",
      },
    },
    menu_id: {
      type: DataTypes.BIGINT.UNSIGNED,
      references: {
        model: "menus",
        key: "id",
      },
    },
  });

  return MenuItem;
};
