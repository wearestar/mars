# mars Contributing Guide

Hi! Thank you very much for being part of mars. Before you make any great ideas,please make sure to take a moment and read through the following guidelines.

- [Code of Conduct](https://github.com/wearestar/mars/blob/develop/.github/CODE_OF_CONDUCT.md)
- [Issue Reporting Guidelines](#issue-reporting-guidelines)
- [Pull Request Guidelines](#pull-request-guidelines)
- [Development Setup](#development-setup)
- [Project Structure](#project-structure)

## Issue Reporting Guidelines

- Always use [https://github.com/wearestar/mars/issues](https://github.com/wearestar/mars/issues) to create new issues.

## Pull Request Guidelines

- The `master` branch is basically just a snapshot of the latest stable release. All development should be done in dedicated branches. **Do not submit PRs against the `master` branch.**

- Checkout a topic branch from the relevant branch, e.g. `develop`, and merge back against that branch.

- Work in the `app` and other folders and **DO NOT** checkin `public/css`,`public/fonts`,`public/js` in the commits.

- It's OK to have multiple small commits as you work on the PR - we will let GitHub automatically squash it before merging.

- Make sure `vendor\bin\phpunit -c phpunit.xml` passes. (see [development setup](#development-setup))

- If adding new feature:
  - Add accompanying test case.
  - Provide convincing reason to add this feature. Ideally you should open a suggestion issue first and have it greenlighted before working on it.

- If fixing a bug:
  - If you are resolving a special issue, add `(fix #xxxx[,#xxx])` (#xxxx is the issue id) in your PR title for a better release log, e.g. `update entities encoding/decoding (fix #3899)`.
  - Provide detailed description of the bug in the PR. Live demo preferred.
  - Add appropriate test coverage if applicable.

## Development Setup

You will need [Node.js](http://nodejs.org) **version 6+** and [Composer](https://getcomposer.org/)(need running Composer during compiling project)

After cloning the repo, run:

```bash
$ npm install
$ composer install
```
### Commonly used NPM scripts

```bash
# watch and auto re-build public/**
$ npm run dev

# Hot deployment project static resources to public/**
$ npm run hot

# build all dist files, including npm packages
$ npm run prod
```
There are some other scripts available in the `scripts` section of the `package.json` file.