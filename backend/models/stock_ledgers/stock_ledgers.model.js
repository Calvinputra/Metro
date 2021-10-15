module.exports = (sequelize, Sequelize) => {
  const StockLedger = sequelize.define("stock_ledgers", {
    id: {
      type: Sequelize.BIGINT.UNSIGNED,
      autoIncrement: true,
      primaryKey: true,
      allowNull: false,
    },
    source_table: {
      type: Sequelize.STRING,
    },
    product_id: {
      type: Sequelize.BIGINT.UNSIGNED,
      references: {
        model: "products",
        key: "id",
      },
    },
    source_id: {
      type: Sequelize.BIGINT.UNSIGNED,
    },
    qty: {
      type: Sequelize.INTEGER,
      allowNull: false,
      defaultValue: 0,
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

  return StockLedger;
};
