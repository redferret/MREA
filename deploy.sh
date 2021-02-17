# Edit this file for easier deployment through SSH
# First argument is the root directory of the app
# Second argument is the name of the directory the app will sit in
echo "Deploying Web App"
git fetch https://github.com/redferret/temp.git +refs/heads/*:refs/remotes/origin/*
git merge --strategy-option theirs
git add -u
git commit -m "Deployment Merge"
git push https://github.com/redferret/temp.git refs/heads/master:refs/heads/master
cp -rf ./public/* ./../../$1/$2/
cp -rf ./public/.htaccess ./../../$1/$2/
echo "Done"
