<h1>BC GOV Advocase image</h1>

Table of contents
- [Overview](#overview)
  - [Status of customizations](#status-of-customizations)
  - [Current SuiteCRM version](#current-suitecrm-version)
- [How to use this image](#how-to-use-this-image)
  - [New installation vs Existing installation](#new-installation-vs-existing-installation)
  - [Building the SuiteCRM image](#building-the-suitecrm-image)
  - [Running the SuiteCRM container](#running-the-suitecrm-container)
  - [Environment variables](#environment-variables)

# Overview

This is the BC Gov Themed SuiteCRM image. It is based on the [BC Gov SuiteCRM image](../suitecrm-image/README.md).

## Status of customizations

The customizations in this image are not yet complete. The theme customizations were done for Advocase and the SDPR team, and had specific customizations for this specific project. When striped of these specific customizations, a few modules that were marked as "done" are not yet complete. Bellow is a list of all modules and their current status:

| Module | Status | Notes |
|--------|--------|-------|
| Home | Not done | The modal that pops up when you click on `Add Dashlets`, `More Actions -> Add Tab`, and `More Actions -> Edit Tabs` are not themed. Also, the configure modal for the dashlets is not themed |
| Accounts | Not done | There are a few UI/UX issues with the `Insitghts` button and side widget theming. When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme |
| Contacts | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme |
| Opportunities | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme |
| Leads | Not done | There are a few UI/UX issues with the `Insitghts` button and side widget theming. When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. Also, the `Create Lead with VCard` page is not done and have layout issues |
| Quotes | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |
| Calendar | Not started | |
| Documents | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |
| Emails | Not started | |
| Campaigns | Not started | Appart from the list view, that inherits the theme from other pages, the rest of the module is not themed |
| Calls | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |
| Meetings | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |
| Tasks | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. |
| Notes | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. |
| Invoices | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |
| Contracts | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |
| Cases | Almost done | Just one small UI issue with the `State` field and `Account Name` field styling |
| Targets | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. |
| Target Lists | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. |
| Projects | Not started | Appart from the list view, that inherits the theme from other pages, the rest of the module is not themed |
| Projects Templates | Not started | Appart from the list view, that inherits the theme from other pages, the rest of the module is not themed |
| Events | Not started | Appart from the list view, that inherits the theme from other pages, the rest of the module is not themed |
| Locations | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. |
| Products | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme. |
| Product Categories | Almost done | Just one small UI issue with the `Parent category` field styling |
| PDF Templates | Not started | Appart from the list view, that inherits the theme from other pages, the rest of the module is not themed |
| Reports | Almost done | Additional styling is needed for the report builder |
| Knowledge Base | Done | |
| KB Categories | Almost done | Just one small UI issue with the `Created By` field styling |
| Email Templates | Not started | Apart from the list view, that inherits the theme from other pages, the rest of the module is not themed |
| Surveys | Not done | When in `Create` and `Edit` view, the sections layout have a weird behaviour compared to the original SuiteCRM theme, and also have layout issues |

Also, all the `Admin` pages are are not started and some of them inherit the theme from other pages, but are fully themed

## Current SuiteCRM version

The SuiteCRM version used in this image is the `8.6.2`. Check the release notes [here](https://docs.suitecrm.com/8.x/admin/releases/8.6/).

# How to use this image

## New installation vs Existing installation

This image will check for you if you already have a database with all SuiteCRM tables and data, or if you need a fresh SuiteCRM installation. The commands to run both cases are the same.

## Building the SuiteCRM image

Build the image using the following command:

```bash
docker build -t your-user/your-image-name docker/bcgovtheme-image
```
## Running the SuiteCRM container

Run the following command to start the SuiteCRM container:

```bash
docker run -d --name suitecrm -p 8181:8181 -e DATABASE_URL="mysql://suitecrm:suitecrm@localhost:3306/suitecrm" -e SUITE_DB_HOST="localhost" -e SUITE_DB_USER="suitecrm" -e SUITE_DB_NAME="suitecrm" -e SUITE_DB_PASSW="suitecrm" -e SUITE_DB_PORT=3306 -e SESSION_SAVE_HANDLER="files" -e SESSION_SAVE_PATH="/tmp" -e SUITECRM_ADMIN_PWD="admin" your-user/your-image-name
```
## Environment variables

The following environment variables are the same as the [BC Gov SuiteCRM image environment variables](../suitecrm-image/README.md#environment-variables):

| Variable | Description | Required | Default value |
|----------|-------------|----------|---------------|
| `DATABASE_URL` | Database URL | Yes | |
| `SUITE_DB_HOST` | Database host | Yes | |
| `SUITE_DB_USER` | Database user | Yes | |
| `SUITE_DB_NAME` | Database name | Yes | |
| `SUITE_DB_PASSW` | Database password | Yes | |
| `SUITE_DB_PORT` | Database port | Yes | |
| `SESSION_SAVE_HANDLER` | PHP Session save handler | Yes | |
| `SESSION_SAVE_PATH` | PHP Session save path | Yes | |
| `SUITECRM_ADMIN_PWD` | SuiteCRM admin password | Yes | |