"use strict";

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.bulkInsert(
      "menus",
      [
        {
          id: 1,
          title: "Header Menu",
        },
        {
          id: 2,
          title: "Footer Menu",
        },
      ],
      {}
    );
  },

  down: async (queryInterface, Sequelize) => {
    const Op = Sequelize.Op;
    await queryInterface.bulkDelete("menus", { id: { [Op.in]: [1, 2] } });
  },
};
