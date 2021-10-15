module.exports = (sequelize, Sequelize) => {
  const Attribute = sequelize.define("attributes", {
    id: {
      type: Sequelize.BIGINT.UNSIGNED,
      autoIncrement: true,
      primaryKey: true,
    },
    title: {
      type: Sequelize.STRING,
      allowNull: false,
    },
    is_required: {
      type: Sequelize.BOOLEAN,
      defaultValue: false,
      allowNull: false,
    },
    default_value: {
      type: Sequelize.STRING,
    },
    options: {
      type: Sequelize.JSON,
    },
    createdAt: {
      allowNull: false,
      type: Sequelize.DATE,
      defaultValue: Sequelize.NOW,
    },
    updatedAt: {
      allowNull: false,
      type: Sequelize.DATE,
      defaultValue: Sequelize.NOW,
    },
    category_id: {
      type: Sequelize.BIGINT.UNSIGNED,
      references: {
        model: "categories",
        key: "id",
      },
    },
    
  });

  return Attribute;
};
