module.exports = (sequelize, Sequelize) => {
    const ProductAttribute = sequelize.define("product_attributes", {
      id: {
        type: Sequelize.BIGINT.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
        allowNull: false,
      },
     
      product_id: {
        type: Sequelize.BIGINT.UNSIGNED,
        references: {
          model: "products",
          key: "id",
        },
      },
      attribute_id: {
        type: Sequelize.BIGINT.UNSIGNED,
        references: {
          model: "attributes",
          key: "id",
        },
      },
      value: {
        type: Sequelize.STRING,
        allowNull: false,
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
  