const AdminBroExpress = require("@admin-bro/express");

const buildAdminRouter = (admin) =>{
    const router = AdminBroExpress.buildRouter(admin);
    return router
}
module.exports = buildAdminRouter;