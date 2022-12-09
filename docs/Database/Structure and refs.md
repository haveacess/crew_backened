All database structure described in **database.dbml**. 

How to open database structure:
1. Visit to [dbdocs](https://dbdocs.io/docs)
2. Install software for building docs
   * After install please login to platform ``dbdocs login``
3. ``dbdocs build`` and the open the link

FAQ:

**Q:** After type any dbdocs command, ex. ``dbdocs login`` **nothing hapened** </br>
**A:** Probably you located behind corporate network or using proxy. </br>
**FIX:**

+++ For unix
export http_proxy=protocol://address:port </br>
export HTTP_PROXY=protocol://address:port
+++ For windows
set http_proxy=protocol://address:port </br>
set HTTP_PROXY=protocol://address:port