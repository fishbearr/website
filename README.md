# SASE website
SASE Website hosted at students.washington.edu/sase.

## Updating:
Clone the repository onto your developmental machine:

`https://github.com/saseuw/website.git`

Then, you can open it up in your favorite code editor and update away! Once you're done updating, be sure to `add`, `commit`, and `push` back up to master.

## Deploying:

First ssh into the web developmental server: 

`ssh sase@vergil.u.washington.edu`

More information about ssh'ing [here](https://itconnect.uw.edu/connect/web-publishing/shared-hosting/ssh/). You'll then be prompted to enter the password, which is `LHospital`.

You should now be inside the root folder. To see your current directory, use the `ls` command. 

To deploy, you'll need to be inside the `public_html` folder. `cd public_html` should do the trick.

To pull updates from github onto the website, use the following command:

`git pull origin master`

And that's all! You should be able to refresh the website URL and see the changes you've made.

## Contact:

For questions, contact:
2017-2018 webmaster: Garrett Mar marg4@uw.edu 
2016-2017 webmasters: Thomas Tseng, Leanne Hwa lkhwa@uw.edu
