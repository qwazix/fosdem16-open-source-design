## FOSDEM 15 Open Source DevRoom Presentation Slides

#Open source in non software design
##Architectural, structural and other design domains could go open source

https://fosdem.org/2016/schedule/event/osd_open_source_in_non_software_design/

This presentation is shared under CC BY-SA 4.0 which means that you can: 

Share — copy and redistribute the material in any medium or format
Adapt — remix, transform, and build upon the material
for any purpose, even commercially.

The accompanying code (except the libraries and where otherwise stated) is shared under the GPLv3

#Auto advancing Slides

The presentation includes a system to auto-advance slides on a website hosted version.

If you run the slideshow locally, and set the text in the 'official' text file to 'true', then the system notifies the webserver where the slideshow is hosted online, and syncs the slides of the viewers. This is useful for people that are livestreaming your presentation.

When you finish you just press D and it frees the online system letting users go back and forth in the deck.

There are three possible values for the 'official' file:

 * true: notifies the server about the current slide. User actions on the server are blocked.
 * false: acts as a client and queries the 'state' file to auto show a specific slide at an interval, except if state==_allclear_
 * preview: allows user control without notifiying the server, so you can do your presentation practice 