require("dotenv").config();

module.export = {
  development: {
    username: process.env.DATABASE_USER,
    password: process.env.DATABASE_PASS,
    port: process.env.DATABASE_PORT,
    database: process.env.DATABASE_NAME,
    host: process.env.DATABASE_HOST,
    dialect: "mysql",
  },
  test: {
    username: process.env.DATABASE_USER,
    password: process.env.DATABASE_PASS,
    port: process.env.DATABASE_PORT,
    database: process.env.DATABASE_NAME,
    host: process.env.DATABASE_HOST,
    dialect: "mysql",
  },
  production: {
    username: process.env.DATABASE_USER,
    password: process.env.DATABASE_PASS,
    port: process.env.DATABASE_PORT,
    database: process.env.DATABASE_NAME,
    host: process.env.DATABASE_HOST,
    dialect: "mysql",
  },
};
