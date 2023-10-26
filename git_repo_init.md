# Git repo init

Create a new repository:

```console
git init
```

Add all files in project and commit them:

```console
git add .
git commit -m "init"
```

Rename local brach to **main**:

```console
git branch -M main
```

Add the remote origin of this project, hosted on GitHub:

```console
git remote add origin https://github.com/TomascpMarques/mvctestell
```

Git pull and rebase the local branch with the origin/main:

```console
git pull --rebase origin main
```

Push the projects local files into remote:

```console
git push -u origin main
```

**FIN**
