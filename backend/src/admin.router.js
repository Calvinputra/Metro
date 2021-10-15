const AdminBroExpress = require("@admin-bro/express");
const db = require("../models");
const User = db.users;
const argon2 = require("argon2");

const buildAdminRouter = (admin) => {
  const router = AdminBroExpress.buildAuthenticatedRouter(admin, {
    authenticate: async (email, password) => {
      const user = await User.findOne({
        where: { email: email },
      });
      if (user) {
        const matched = await argon2.verify(user.encrypted_password,password);
        if (matched) {
          return user;
        }
      }
      return false;
    },
    cookiePassword: "2e632f56d643862ba40d2acc86af778b",
  });
  return router;
};
module.exports = buildAdminRouter;
