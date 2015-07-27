require "compass/import-once/activate"
# Require any additional compass plugins here.

http_path = "../"
css_dir = "css"
sass_dir = "sass"
fonts_dir = "css/fonts"
output_style = :compressed
#output_style = :expanded
javascripts_dir = "js"
images_dir = "images"
generated_images_dir = "images/interfaz"

## Make a copy of sprites with a name that has no uniqueness of the hash.
#on_sprite_saved do |filename|
#  if File.exists?(filename)
#    FileUtils.cp filename, filename.gsub(%r{-s[a-z0-9]{10}\.png$}, '.png')
#    # Note: Compass outputs both with and without random hash images.
#    # To not keep the one with hash, add: (Thanks to RaphaelDDL for this)
#    FileUtils.rm_rf(filename)
#  end
#end
# 
## Replace in stylesheets generated references to sprites
## by their counterparts without the hash uniqueness.
#on_stylesheet_saved do |filename|
#  if File.exists?(filename)
#    css = File.read filename
#    File.open(filename, 'w+') do |f|
#      f << css.gsub(%r{-s[a-z0-9]{10}\.png}, '.png')
#    end
#  end
#end

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
