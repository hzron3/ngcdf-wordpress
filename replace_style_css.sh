#!/bin/bash

# Define the base directory where the WordPress site is located
BASE_DIR="/var/www/"

# Define the path to the GitHub CSS file
GITHUB_CSS_URL="https://raw.githubusercontent.com/hzron3/ngcdf-wordpress/main/style.css"

# Define the relative path to the CSS file in the WordPress site's styles folder
CSS_FILE_PATH="wp-content/themes/cdf_constituency/style.css"

# Check if the base directory is empty
if [ -z "$(ls -A $BASE_DIR)" ]; then
    echo "The base directory $BASE_DIR is empty. No sites to update."
    exit 1
fi

# Loop through each directory in the base directory
for site in "$BASE_DIR"/*; do
    if [ -d "$site" ]; then
        TARGET_CSS_FILE="$site/$CSS_FILE_PATH"

        # Check if the target CSS file exists
        if [ -f "$TARGET_CSS_FILE" ]; then
            echo "Updating CSS file in $site"

            # Download the new CSS file from GitHub and replace the existing one
            curl -o "$TARGET_CSS_FILE" "$GITHUB_CSS_URL" 2> /tmp/curl_error.log

            if [ $? -eq 0 ]; then
                echo "Successfully replaced CSS file in $site"
            else
                echo "Failed to replace CSS file in $site"
                echo "Error details:"
                cat /tmp/curl_error.log
            fi
        else
            echo "CSS file not found in $site"
        fi
    else
        echo "$site is not a directory."
    fi
done

# Clean up temporary files
rm -f /tmp/curl_error.log

echo "CSS update process completed."
