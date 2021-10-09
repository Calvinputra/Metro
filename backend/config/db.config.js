module.exports = {
  HOST: "localhost",
  USER: "root",
  PORT: "3307",
  PASSWORD: "root",
  DB: "metro_jaya",
  dialect: "mysql",
  pool: {
    max: 5,
    min: 0,
    acquire: 30000,
    idle: 10000,
  },
};
