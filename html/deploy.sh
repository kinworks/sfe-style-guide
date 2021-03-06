#!/bin/bash

wall DeployMonkey running SFE Style Guide Deploy;

# Get new tags from remote
git fetch --tags;

git fetch --quiet --tags origin master;

# Get latest tag name
latestTag=$(git describe --tags `git rev-list --tags --max-count=1`);

# Checkout latest tag
git checkout $latestTag;

wall DeployMonkey successfully deployed SFE Style Guide $latestTag to http://style.sfe.kin.works;
