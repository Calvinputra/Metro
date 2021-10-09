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
          title: "Footer Menu 1",
        },
        {
          id: 3,
          title: "Footer Menu 2",
        },
        {
          id: 4,
          title: "Footer Menu 3",
        },
      ],
      {}
    );
  },

  down: async (queryInterface, Sequelize) => {
    const Op = Sequelize.Op;
    await queryInterface.bulkDelete("menus", { id: { [Op.in]: [1, 2, 3, 4] } });
  },
};
