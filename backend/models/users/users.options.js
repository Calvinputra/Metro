const argon2 = require("argon2");
const passwordFeature = require('@admin-bro/passwords');

module.exports = {
  options: {
    properties: {
      email_verified_at: {
        isVisible: {
          edit: false,
        },
      },
      remember_token: {
        isVisible: false,
      },
      password: {
        type: "password",
      },
      encrypted_password: {
        isVisible: false,
      },
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
  features: [passwordFeature({
    // PasswordsOptions
    properties: {
      // to this field will save the hashed password
      encryptedPassword: 'encrypted_password'
    },
    hash: argon2.hash,
  })]
  
};
