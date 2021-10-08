module.exports = (sequelize, Sequelize) => {
    const Menu = sequelize.define("menus", {
        id:{
            type: Sequelize.BIGINT.UNSIGNED,
            autoIncrement: true,
            primaryKey: true
        },
      title: {
        type: Sequelize.STRING
      },
    });
  
    return Menu;
  };