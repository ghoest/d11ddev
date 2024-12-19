// eslint.config.mjs
import globals from 'globals';
import js from '@eslint/js';
import jsdoc from 'eslint-plugin-jsdoc';
import stylistic from '@stylistic/eslint-plugin';

const config = [
  js.configs.recommended,
  jsdoc.configs['flat/recommended'],
  stylistic.configs['recommended-flat'],
  {
    ignores: ['docroot/**'],
    languageOptions: {
      globals: {
        ...globals.browser,
        ...globals.jquery,
        ...globals.node,
        Drupal: false
      }
    },
    plugins: {
      '@stylistic': stylistic,
      jsdoc,
    },
    rules: {
      'no-unused-vars': ['warn'],
      '@stylistic/indent': ['error', 2],
    }
  }
];

export default config;
