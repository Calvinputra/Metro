module.exports = (Sequelize, DataTypes) => {
    const Menu = Sequelize.define("menus", {
        id:{
            type: DataTypes.BIGINT.UNSIGNED,
            autoIncrement: true,
            primaryKey: true
        },
      title: {
        type: DataTypes.STRING
      },
    });
  
    return Menu;
  };