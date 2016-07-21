# learn-php
Learning PHP


Initial Setup
-------------

1. Copy a build.xml when creating a new project.
2. Edit the `build.xml`, update the value for the project `name` and set the `context.name` property to the folder name of the project.


Auto-Building on file change
----------------------------

1. Open the project properties
2. Go to `Builders`
3. Add an Ant Builder and name it `<project_name> Ant Builder` because this must be unique in the workspace.
4. Browse for the build file.
5. Go to `Targets` subtab and click the `Set Targets...` for the `Auto Build`
6. Check the `build` and accept all dialogs.
