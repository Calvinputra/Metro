module.exports = (sequelize, Sequelize) => {
  const Product = sequelize.define("product_images", {
    id: {
      type: Sequelize.BIGINT.UNSIGNED,
      autoIncrement: true,
      primaryKey: true,
      allowNull: false,
    },
    image_path: {
      type: Sequelize.STRING,
      allowNull: false,
    },
    is_display_image: {
      type: Sequelize.BOOLEAN,
      defaultValue: 0,
      allowNull: false,
    },
    product_id: {
      type: Sequelize.BIGINT.UNSIGNED,
      references: {
        model: "products",
        key: "id",
      },
    },
    createdAt: {
      allowNull: false,
      type: Sequelize.DATE,
      defaultValue: Sequelize.NOW,
    },
    updatedAt: {
      allowNull: false,
      type: Sequelize.DATE,
      defaultValue: Sequelize.NOW,
    },
  });

  return Product;
};
