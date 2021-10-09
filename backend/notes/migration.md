Seeding Commands
npx sequelize-cli db:seed:all //Running Seed
npx sequelize-cli db:seed:undo --seed name-of-seed-as-in-data //Undo Seed
npx sequelize-cli db:seed:undo:all //Undo Seed all

Creating Seed&Migration Commands
npx sequelize-cli seed:generate --name menus //create seed
npx sequelize-cli migration:generate --name menus

Migration Commands
npx sequelize-cli db:migrate
npx sequelize-cli db:migrate:undo //revert 1 step
npx sequelize-cli db:migrate:undo:all --to XXXXXXXXXXXXXX-create-posts.js //revert selected

Generate Migration & model
npx sequelize-cli model:generate --name users --attributes firstName:string,lastName:string,email:string