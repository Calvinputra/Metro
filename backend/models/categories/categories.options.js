const argon2 = require("argon2");
module.exports = {
  options: {
    properties: {
      createdAt: {
        isVisible: {
          edit: false,
        },
      },
      updatedAt: {
        isVisible: {
          edit: false,
        },
      },
    },
  },
};
