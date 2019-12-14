const writeFile = require('fs').writeFile;
// Configure Angular `environment.ts` file path
const targetPath = './src/environments/environment.ts';
// Load node modules
const colors = require('colors');
require('dotenv').load();
// `environment.ts` file structure
const envConfigFile = `export const environment = {
   apiBaseUrl: '${process.env.BACK_HOST}',
   client_id: '${process.env.CLIENT_ID}',
   client_secret: '${process.env.CLIENT_SECRET}',
   production: false,
   hmr: true,
   version: '1-dev',
   supportedLanguages: ['en-US', 'fr-FR'],
   defaultLanguage: 'en-US',
};
`;
console.log(colors.magenta('The file `environment.ts` will be written with the following content: \n'));
console.log(colors.grey(envConfigFile));
writeFile(targetPath, envConfigFile, function(err) {
  if (err) {
    throw console.error(err);
  } else {
    console.log(colors.magenta(`Angular environment.ts file generated correctly at ${targetPath} \n`));
  }
});
