"use strict";

module.exports = {
  up: async (queryInterface, Sequelize) => {
    await queryInterface.bulkInsert(
      "menu_items",
      [
        {
          id: 1,
          title: "Kategori 1",
          target: "_self",
          url: "#",
          order: "100",
          menu_id: "1",
        },
        {
          id: 2,
          title: "Kategori 2",
          target: "_self",
          url: "#",
          order: "200",
          menu_id: "1",
        },
        {
          id: 3,
          title: "Kategori 3",
          target: "_self",
          url: "#",
          order: "300",
          menu_id: "1",
        },
        {
          id: 4,
          title: "Kategori 4",
          target: "_self",
          url: "#",
          order: "400",
          menu_id: "1",
        },
      ],
      {}
    );
  },

  down: async (queryInterface, Sequelize) => {
    const Op = Sequelize.Op;
    await queryInterface.bulkDelete("menu_items", {
      id: { [Op.in]: [1, 2, 3, 4] },
    });
  },
};
