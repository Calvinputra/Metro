"use strict";

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.createTable("products", {
      id: {
        type: Sequelize.BIGINT.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
      },
      title: {
        type: Sequelize.STRING,
        allowNull: false,
      },
      description: {
        type: Sequelize.STRING,
      },
      display_price: {
        type: Sequelize.DOUBLE,
        defaultValue: 0,
        allowNull: false,
      },
      price: {
        type: Sequelize.DOUBLE,
        defaultValue: 0,
        allowNull: false,
      },
      weight: {
        type: Sequelize.DOUBLE,
        defaultValue: 0,
        allowNull: false,
      },
      dimension_width: {
        type: Sequelize.INTEGER,
        defaultValue: 0,
        allowNull: false,
      },
      dimension_height: {
        type: Sequelize.INTEGER,
        defaultValue: 0,
        allowNull: false,
      },
      dimension_depth: {
        type: Sequelize.INTEGER,
        defaultValue: 0,
        allowNull: false,
      },
      stock: {
        type: Sequelize.INTEGER,
        defaultValue: 0,
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
  },

  down: async (queryInterface, Sequelize) => {
    await queryInterface.dropTable("products");
  },
};
