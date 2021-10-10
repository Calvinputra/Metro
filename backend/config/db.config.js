require('dotenv').config();
module.exports = {
  HOST: process.env.DATABASE_HOST,
  USER: process.env.DATABASE_USER,
  PORT: process.env.DATABASE_PORT,
  PASSWORD: process.env.DATABASE_PASS,
  DB: process.env.DATABASE_NAME,
  dialect: "mysql",
  pool: {
    max: 5,
    min: 0,
    acquire: 30000,
    idle: 10000,
  },
};
