# Image sources

Every service photo has had its background removed (rembg, `birefnet-portrait` model) and was placed on the brand background: a blush gradient (`#fbf1f3` → `#ecd3db`) with a soft rose glow and a faint gold ring.

## Ruffine's work (from @charlottebeauty_1)

These are real clients, taken from https://www.instagram.com/charlottebeauty_1/ and labelled "Ruffine's work" on the site. The site uses no stock photos.

| Local file | Instagram post | Caption on the post |
| --- | --- | --- |
| hero.jpg | https://www.instagram.com/p/C9bgkIURFQX/ | (no caption — long blonde curly twists) |
| about.jpg | https://www.instagram.com/p/C9bf-UPyv8A/ | (no caption — blonde ombré knotless) |
| services/box-braids.jpg | https://www.instagram.com/p/CcWTlm6v_Ke/ | Boxbraids |
| services/knotless-braids.jpg | https://www.instagram.com/p/CcExSdXr4eI/ | knotless braids |
| services/french-curl-braids.jpg | https://www.instagram.com/p/C7AietgPmiE/ | Black French Curl Braids |
| services/boho-braids.jpg | https://www.instagram.com/p/C9Wco-qNIj8/ | Black Boho Braids |
| services/senegalese-twists.jpg | https://www.instagram.com/p/CcExn1ILuwu/ | twist |
| services/fulani-braids.jpg | https://www.instagram.com/p/C7AiL_ePPNp/ | (no caption — Fulani braids, confirmed by the salon) |
| services/cornrows.jpg | https://www.instagram.com/p/Bx-3GkPh3-N/ | Micro cornrows |

## Services without a photo

Faux Locs, Sew-In Weave, Crochet Braids, Jumbo Knotless and Boho Locs show the CB monogram with "Photos coming soon" until Ruffine has her own photos of them. To add one, cut it out and save it to `public/images/services/<name>.jpg`, then set `'image'` for that service in `resources/views/welcome.blade.php`.

## Logo

`logo.png` (for light backgrounds) and `logo-light.png` (plum lettering turned cream, for the dark header and footer) were rebuilt from `charlotte-beauty-braids-logo.png`. The original had a fake checkerboard "transparent" background baked into its pixels. `favicon.ico` and `apple-touch-icon.png` use the CB monogram.
