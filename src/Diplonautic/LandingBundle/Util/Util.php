<?php
    namespace Localler\LandingBundle\Util;
    use Symfony\Component\HttpFoundation\File\UploadedFile;

    class Util
    {
       
        static public function getSlug($cadena, $separador = '-')
        {
                // Código copiado de http://cubiq.org/the-perfect-php-clean-url-generator
                $from = array("Á", "À", "Â", "Ä", "Ă", "Ā", "Ã", "Å", "Ą", "Æ", "Ć", "Ċ", "Ĉ", "Č", "Ç", "Ď", "Đ", "Ð", "É", "È", "Ė", "Ê", "Ë", "Ě", "Ē", "Ę", "Ə", "Ġ", "Ĝ", "Ğ", "Ģ", "á", "à", "â", "ä", "ă", "ā", "ã", "å", "ą", "æ", "ć", "ċ", "ĉ", "č", "ç", "ď", "đ", "ð", "é", "è", "ė", "ê", "ë", "ě", "ē", "ę", "ə", "ġ", "ĝ", "ğ", "ģ", "Ĥ", "Ħ", "I", "Í", "Ì", "İ", "Î", "Ï", "Ī", "Į", "Ĳ", "Ĵ", "Ķ", "Ļ", "Ł", "Ń", "Ň", "Ñ", "Ņ", "Ó", "Ò", "Ô", "Ö", "Õ", "Ő", "Ø", "Ơ", "Œ", "ĥ", "ħ", "ı", "í", "ì", "i", "î", "ï", "ī", "į", "ĳ", "ĵ", "ķ", "ļ", "ł", "ń", "ň", "ñ", "ņ", "ó", "ò", "ô", "ö", "õ", "ő", "ø", "ơ", "œ", "Ŕ", "Ř", "Ś", "Ŝ", "Š", "Ş", "Ť", "Ţ", "Þ", "Ú", "Ù", "Û", "Ü", "Ŭ", "Ū", "Ů", "Ų", "Ű", "Ư", "Ŵ", "Ý", "Ŷ", "Ÿ", "Ź", "Ż", "Ž", "ŕ", "ř", "ś", "ŝ", "š", "ş", "ß", "ť", "ţ", "þ", "ú", "ù", "û", "ü", "ŭ", "ū", "ů", "ų", "ű", "ư", "ŵ", "ý", "ŷ", "ÿ", "ź", "ż", "ž");
                $to   = array("A", "A", "A", "A", "A", "A", "A", "A", "A", "AE", "C", "C", "C", "C", "C", "D", "D", "D", "E", "E", "E", "E", "E", "E", "E", "E", "G", "G", "G", "G", "G", "a", "a", "a", "a", "a", "a", "a", "a", "a", "ae", "c", "c", "c", "c", "c", "d", "d", "d", "e", "e", "e", "e", "e", "e", "e", "e", "g", "g", "g", "g", "g", "H", "H", "I", "I", "I", "I", "I", "I", "I", "I", "IJ", "J", "K", "L", "L", "N", "N", "N", "N", "O", "O", "O", "O", "O", "O", "O", "O", "CE", "h", "h", "i", "i", "i", "i", "i", "i", "i", "i", "ij", "j", "k", "l", "l", "n", "n", "n", "n", "o", "o", "o", "o", "o", "o", "o", "o", "o", "R", "R", "S", "S", "S", "S", "T", "T", "T", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "W", "Y", "Y", "Y", "Z", "Z", "Z", "r", "r", "s", "s", "s", "s", "B", "t", "t", "b", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "w", "y", "y", "y", "z", "z", "z");
                $slug=str_replace($from, $to, $cadena);
    // 		$slug = iconv('UTF-8', 'ASCII//TRANSLIT', utf8_encode($cadena));
                $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
                $slug = strtolower(trim($slug, $separador));
                $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);

                return $slug;
        }

        static public function getName($name, $i)
        {
                return $name.'-'.$i;
        }

        static public function getDate()
        {
                $int= rand(1262055681,1462055681);
                $string = date("Y-m-d H:i:s",$int);
                $date = new \DateTime($string);
                return $date;
        }

        static public function getImg()
        {
                $img = array('example.jpg', 'example-2.jpg', 'example-3.jpg', 'example-4.jpg', 'example-5.jpg', 'example-6.jpg', 'example-7.jpg', 'example-8.jpg');
                $number = rand(0,7);
                return $img[$number];
        }

        static public function getTag()
        {
                $tags = array('tag1', 'tag2', 'tag3', 'tag4', 'tag5', 'tag6', 'tag7', 'tag8');
                $number = rand(0,7);
                return $tags[$number];
        }

        static public function getText()
        {
                $text = "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";

                return $text;
        }
        
        static public function getRandomObject ($objects){
            return $objects[rand(0, count($objects)-1)];
        }
        
        static public function getRandomObjects ($objects, $max){
            if (count($objects)<$max){
                $max = count($objects);
            }
            $randomObjects = new \Doctrine\Common\Collections\ArrayCollection();
            for ($i = 0;$i < rand(0, $max); $i++){
                $randomIndex = rand(0, count($objects)-1);
                $randomObjects[$i] = $randomObjects[$randomIndex];
                unset($objects[$randomIndex]);
            }
            return $randomObjects;
        }
        

    ///UPLOAD IMAGES      
        protected function getUploadRootDir($basepath)
        {
        	// the absolute directory path where uploaded documents should be saved
        	return $basepath.$this->getUploadDir();
        }
        
        protected function getUploadDir()
        {
        	// get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        	return 'images/collaborator/';
        }
        
        static public function upload($object, $field, $basepath, $mainFolder, $maxWidths, $maxHeigths, $folders)
            {

             $class = get_class($object);

            // the file property can be empty if the field is not required
            $getFieldFile = 'get'.$field.'File';
            $setField = 'set'.$field;

            if (null === $object->$getFieldFile()) {
                return;
            }
        
            if (null === $basepath) {
                return;
            }
            
            $systemFilename=explode(".",$object->$getFieldFile()->getClientOriginalName());
            $extension = $object->$getFieldFile()->getClientOriginalExtension();
            $imgFilename = uniqid('-').'.'.$extension;
            $imgFilename = $systemFilename[0].$imgFilename;
            if ($object->$getFieldFile()->move($basepath.$mainFolder, $imgFilename))
            {

                    if (strcasecmp($extension, 'png') == 0){
                    $_pic = imagecreatefrompng($basepath.$mainFolder.$imgFilename);
                    } else {
                            $_pic = imagecreatefromjpeg($basepath.$mainFolder.$imgFilename);
                    }
                    for($i = 0; $i < count($folders); $i++)
                    {
                        $pMaxWidth = $maxWidths[$i];
                        $pMaxHeigth = $maxHeigths[$i];
                        $pWidth = imagesx($_pic);
                        $pHeigth = imagesy($_pic);
                        $pQuality = 85;
                        if($pWidth < $pHeigth){
                                $_porcentaje = $pMaxHeigth*100/$pHeigth;
                                $_heigth = $pMaxHeigth;
                                $_width = ceil($_porcentaje*$pWidth/100);
                        }else{
                                $_porcentaje = $pMaxWidth*100/$pWidth;
                                $_width = $pMaxWidth;
                                $_heigth = ceil($_porcentaje*$pHeigth/100);
                        }
                        $_tmp = imagecreatetruecolor($_width, $_heigth);
                        imagecopyresampled($_tmp, $_pic, 0, 0, 0, 0, $_width, $_heigth, $pWidth, $pHeigth);
                        if (strcasecmp($extension, 'png') == 0)
                        {
                                imagepng($_tmp, $basepath.$folders[$i].$imgFilename);
                        } else {
                                imagejpeg($_tmp, $basepath.$folders[$i].$imgFilename, $pQuality);
                        }
                        imagedestroy($_tmp);
                    }
                
                imagedestroy($_pic);
                
            }
            
            $object->$setField($imgFilename);
            
            $file = $object->$getFieldFile();
            unset($file);
        
        }
        
        static  public function uploadFile($object, $field, $basepath)
        {
            $setField = 'set'.$field;
            $getFileField = 'get'.$field.'File';

        	// the file property can be empty if the field is not required
        	if (null === $object->getPdfFile()) {
        		return;
        	}
        
        	if (null === $basepath) {
        		return;
        	}
            
            $filename = uniqid('murslliures-').'.pdf';
        
        	// sanitize it at least to avoid any security issues
        
        	// move takes the target directory and then the target filename to move to
        	if ($object->getPdfFile()->move($basepath, $filename))
        	{
                $object->setPdf($filename);
                $file = $object->getPdfFile();
                unset($file);
        	}
        
        	// set the path property to the filename where you'ved saved the file
        	
        
        }
        
        static public function PHPtoSy2File($file) {
          $sy2File = new UploadedFile($file['tmp_name'], $file['name'], $file['type'], $file['size'], $file['error'], false);  
          return $sy2File;
        }
        
        static public function sendEmail($subject = "Contacte mursllirues", $content = null, $attach = null, $from = 'notify@murslliures.com', $fromLabel = 'MURSLLIURES', $to= 'info@murslliures.com') {
            
            $mailer = new \Swift_Mailer;
            if ($attach != null) {
                $mensaje = \Swift_Message::newInstance()
                ->setFrom($from, $fromLabel)
                ->setTo($to)
                ->setSubject($subject)
                ->setBody($content, 'text/html')
                ->attach(\Swift_Attachment::fromPath($attach))
                //->embed(\Swift_Image::fromPath($documento))
                ;
                $mailer->send($mensaje);
            } else {
                $mensaje = \Swift_Message::newInstance()
                ->setFrom($from, $fromLabel)
                ->setTo($to)
                ->setSubject($subject)
                ->setBody($content, 'text/html');   
                $mailer->send($mensaje);
            }
        }
        
        ///Picture Functions
        static public function savePicture($picture, $path, $extension, $quality = 85){
            if (strcasecmp($extension, 'png') == 0){
                       imagepng($picture, $path);
                    } else {
                       imagejpeg($picture, $path, $quality);
                    }
        }
        
        static public function saveThumbnailFromPicture($sourcePicture,$desiredWidth,$desiredHeigth,$thumbDestinyFolder,$fotoFilename,$extension, $quality = 85){

            $sourceWidth = imagesx($sourcePicture);
            $sourceHeight = imagesy($sourcePicture);
            $desiredAspectRatio = $desiredWidth/$desiredHeigth;
            $sourceAspectRatio = $sourceWidth/$sourceHeight;

            if ($sourceAspectRatio < $desiredAspectRatio)
            {
               $_width = $sourceWidth;
               $_height = ceil($sourceWidth*$desiredHeigth/$desiredWidth);
               $cropX = 0;
               $cropY = $sourceHeight/2 - ($_height/2);

            } else {
               $_width = ceil($sourceHeight*$desiredWidth/$desiredHeigth);
               $_height = $sourceHeight;
               $cropX = $sourceWidth/2 - ($_width/2);
               $cropY = 0;
            }

            $_tmpPicture = imagecreatetruecolor($_width, $_height);
            imagecopyresampled($_tmpPicture, $sourcePicture, 0, 0, $cropX, $cropY, $_width, $_height, $_width, $_height);
            $_tmpScaled = imagecreatetruecolor($desiredWidth, $desiredHeigth);
            imagecopyresampled($_tmpScaled,$_tmpPicture, 0, 0, 0, 0,$desiredWidth, $desiredHeigth,$_width, $_height);
            imagedestroy($_tmpPicture);
            self::savePicture($_tmpScaled,$thumbDestinyFolder.$fotoFilename,$extension,$quality);
            imagedestroy($_tmpScaled);
        }
        
        static public function savePictureMaxSize($picture,$maxWidth,$maxHeight,$destinyFolder,$fotoFilename,$extension,$quality = 85){
            
            $pWidth = imagesx($picture);
            $pHeight = imagesy($picture);
            
            if($pWidth > $maxWidth || $pHeight > $maxHeight) {
                    if($pWidth > $pHeight){
                           $_porcentaje = $maxWidth*100/$pWidth;
                           $_width = $maxWidth;
                           $_height = ceil($_porcentaje*$pHeight/100);
                    }else{
                           $_porcentaje = $maxHeight*100/$pHeight;
                           $_height = $maxHeight;
                           $_width = ceil($_porcentaje*$pWidth/100);
                    }
                    $_tmp = imagecreatetruecolor($_width, $_height);
                    imagecopyresampled($_tmp, $picture, 0, 0, 0, 0, $_width, $_height, $pWidth, $pHeight);
            } else {
                    $_tmp = imagecreatetruecolor($pWidth, $pHeight);
                    imagecopyresampled($_tmp, $picture, 0, 0, 0, 0, $pWidth, $pHeight, $pWidth, $pHeight);
            }
            self::savePicture($_tmp,$destinyFolder.$fotoFilename,$extension,$quality);
            imagedestroy($_tmp);
        }
        
        static public function savePictureStaticWidth($picture,$desiredWidth,$destinyFolder,$fotoFilename,$extension,$quality = 85){
            
            $pWidth = imagesx($picture);
            $pHeight = imagesy($picture);
            
            if($pWidth > $desiredWidth) {
                    $_porcentaje = $desiredWidth*100/$pWidth;
                    $_width = $desiredWidth;
                    $_height = ceil($_porcentaje*$pHeight/100);
                    $_tmp = imagecreatetruecolor($_width, $_height);
                    imagecopyresampled($_tmp, $picture, 0, 0, 0, 0, $_width, $_height, $pWidth, $pHeight);
            } else {
                    $_tmp = imagecreatetruecolor($pWidth, $pHeight);
                    imagecopyresampled($_tmp, $picture, 0, 0, 0, 0, $pWidth, $pHeight, $pWidth, $pHeight);
            }
            self::savePicture($_tmp,$destinyFolder.$fotoFilename,$extension,$quality);
            imagedestroy($_tmp);
        }
        static public function getThumbnailFromPicture($sourcePicture,$desiredWidth,$desiredHeigth){

            $sourceWidth = imagesx($sourcePicture);
            $sourceHeight = imagesy($sourcePicture);
            $desiredAspectRatio = $desiredWidth/$desiredHeigth;
            $sourceAspectRatio = $sourceWidth/$sourceHeight;

            if ($sourceAspectRatio < $desiredAspectRatio)
            {
               $_width = $sourceWidth;
               $_height = ceil($sourceWidth*$desiredHeigth/$desiredWidth);
               $cropX = 0;
               $cropY = $sourceHeight/2 - ($_height/2);

            } else {
               $_width = ceil($sourceHeight*$desiredWidth/$desiredHeigth);
               $_height = $sourceHeight;
               $cropX = $sourceWidth/2 - ($_width/2);
               $cropY = 0;
            }

            $_tmpPicture = imagecreatetruecolor($_width, $_height);
            imagecopyresampled($_tmpPicture, $sourcePicture, 0, 0, $cropX, $cropY, $_width, $_height, $_width, $_height);
            $_tmpScaled = imagecreatetruecolor($desiredWidth, $desiredHeigth);
            imagecopyresampled($_tmpScaled,$_tmpPicture, 0, 0, 0, 0,$desiredWidth, $desiredHeigth,$_width, $_height);
            imagedestroy($_tmpPicture);
            return $_tmpScaled;
        }

        static public function setEntityTranslatableFields($object, $defaultLocale){
            foreach ($object->getTranslations() as $translation){
                if ($translation->getLocale() == $defaultLocale){
                    $content = $translation->getContent();
                    $setter = "set".$translation->getField();
                    $object->$setter($content);
                }
            } 
        }
    }