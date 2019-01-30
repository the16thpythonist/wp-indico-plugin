# IndicoWp - Automated Events for Indico Event Management

## What is Indico?

First started in 2002 as an European project, [indico](https://getindico.io/) has since been adopted by the 
[European Organization for Nuclear Research (CERN)](https://home.cern/) 
and is now being maintained as a open source software solution for custom event management 
websites, specifically catered to the needs of the *scientific community*. Offering features such as full support of 
the scientific conference lifecycle, ranging from registration and abstract submission to the final papers and 
presentations being stored in the system. 

Many organizations utilize this powerful tool as their solution to everything around event scheduling, attendee 
management, room booking and more.

## Why IndicoWp?

Well, are you involved in science and proud of the high class papers you and your colleagues have work so hard on 
publishing? Then you probably already have a website up and running to show your accomplishments to the whole world. 
And what easier way to quickly build your own website, than 
[Wordpress](https://wordpress.com/create/?utm_source=adwords&utm_medium=cpc&keyword=wordpress&creative=263011053596&campaignid=648381338&adgroupid=57942203728&matchtype=e&device=c&network=g&sgmt=gb&utm_source=adwords&utm_campaign=Google_WPcom_Search_Brand_Desktop_DE_en&utm_medium=cpc&keyword=wordpress&creative=263011053596&campaignid=648381338&adgroupid=57942203728&matchtype=e&device=c&network=g&targetid=kwd-313411415&locationid=9041872&gclid=CjwKCAiAs8XiBRAGEiwAFyQ-ejZp2bJjAIC5yiD4ItRyxvvXee7ahWLwRWLeL3Kv-5LgCnikXzN2AhoCOhEQAvD_BwE)
?

Now you might also want your Wordpress site to show, what events you and your workgroup will be attending next. But 
after some time you'll notice that either writing every new post yourself or copy/pasting the content from indico just 
becomes a tedious and time consuming task.

This is why IndicoWp leverages the powerful *Indico REST API* to *automatically* import indico Events to your wordpress 
website, by just issuing *2 click* comfortly from the wordpress admin area.

## Getting started

### Acquiring a indico API key

### Setting up the plugin

To install it the most important prerequisite is to *already have a wordpress site up and running* obviously. Since 
this plugin is not *yet* part of the official wordpress repository, you will have to install it 
by manually placing the files into the correct folders. This means you will need to have 
*file system access* for your wordpress installation.

But dont fear an unnecessarily complicated setup process! This plugin can be installed by doing 
as little as *two manual steps*:

1) First download this repository and place it as a folder named "wpindico" inside the "plugins" folder of your wordpress 
installation (If you dont know about the plugins folder, it is located in 
"your_wordpress_folder/wp-content/plugins"). You can do this in two ways:
    - Use Git. That is the easiest solution. So if you already have git installed just clone this repository 
    into your plugins folder like this (Obviously using the path to your specific wordpress installation):
        ```bash
        git clone https://github.com/the16thpythonist/wp-scopus-plugin {your wordpress path}/wp-content/plugins/wpindico
        ```
    - Download this repository as a ZIP file. Move it to the plugins folder, extract it and rename the new resulting 
    folder to "wpindico"
    
2) Now you only have to install the dependencies of the package correctly. Since you are already using wordpress I am 
going to assume, that you already have PHP installed on your system. To install just navigate into the newly created 
"wpscopus" folder and run the "install.php" script by running either of these commands:
    ```bash
    ./install.php
    ```
    ```bash
    php install.php
    ```

**And that's it**. The plugin is now ready. The only thing left to do is to *activate it* under the "plugins" tab from the 
admin area of your wordpress site.

## CHANGELOG

### 0.0.0.1 - 04.01.2019
- Initial version

### 0.0.0.2 - 30.01.2019
- Updated the Readme file to contain installation description

