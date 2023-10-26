# Git repo init

Create a new repository:

```console
git init
```

Add all files in project and commit them:

```shell
git add .
git commit -m "init"
```

Rename local brach to **main**:

```shell
git branch -M main
```

Add the remote origin of this project, hosted on GitHub:

```shell
git remote add origin https://github.com/TomascpMarques/mvctestell
```

Git pull and rebase the local branch with the origin/main:

```shell
git pull --rebase origin main
```

Push the projects local files into remote:

```shell
git push -u origin main
```

**FIN**
