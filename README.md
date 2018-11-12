In the commit marked 'tag', a configuration file was accidentally added to the project. Unfortunately, the author forgot to redact it, and so accidentally committed a password.

We need to remove the password from the Git history, without destroying all the commits after it.

Check this commit out, and amend it to not contain the password. Afterwards, rebase the HEAD onto the amended commit. 
