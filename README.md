#git init
git add -A && commit -m "first commit"
git branch -M Mster
git remote add origin https://github.com/fraydoun/Blog.git
git push -u origin main

echo "# Blog" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/fraydoun/Blog.git
git push -u origin main