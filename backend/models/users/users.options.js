const argon2 = require("argon2");
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
  actions: {
    new: {
      before: async (request) => {
        console.log(request);
        if (request.method === "post") {
          const { password, ...otherParams } = request.payload;
          if (password) {
            const encrypted_password = await argon2.hash(password);
            return {
              ...request,
              payload: {
                ...otherParams,
                encrypted_password,
              },
            };
          }
        }
      },
      after: async (response) => {
        if (response.record && response.record.errors) {
          response.record.errors.password =
            response.record.errors.encrypted_password;
        }
        return response;
      },
    },
  },
};
