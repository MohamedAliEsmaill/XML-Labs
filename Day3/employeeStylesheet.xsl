<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" encoding="UTF-8" doctype-public="-//W3C//DTD XHTML 1.0 Transitional//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Employee Directory</title>
      </head>
      <body bgcolor="#f0f0f0">
        <center>
          <table border="2" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" width="80%" style="border-collapse:collapse; margin-top: 50px;">
            <tr>
              <td colspan="10" bgcolor="#47BAF0" align="center" valign="middle">
                <h2 style="color: #FFFFFF; margin:0; padding: 10px;">Employee Details</h2>
              </td>
            </tr>
            <tr bgcolor="#CCCCCC">
              <th align="left">Name</th>
              <th align="left">Home Phone</th>
              <th align="left">Work Phone</th>
              <th align="left">Mobile Phone</th>
              <th align="left">Street</th>
              <th align="left">Building Number</th>
              <th align="left">Region</th>
              <th align="left">City</th>
              <th align="left">Country</th>
              <th align="left">Email</th>
            </tr>
            <xsl:for-each select="employees/employee">
              <tr bgcolor="#FFFFFF">
                <td><xsl:value-of select="name" /></td>
                <td><xsl:value-of select="phones/phone[@type='home']" /></td>
                <td><xsl:value-of select="phones/phone[@type='work']" /></td>
                <td><xsl:value-of select="phones/phone[@type='mobile']" /></td>
                <td><xsl:value-of select="addresses/address/street" /></td>
                <td><xsl:value-of select="addresses/address/buildingNumber" /></td>
                <td><xsl:value-of select="addresses/address/region" /></td>
                <td><xsl:value-of select="addresses/address/city" /></td>
                <td><xsl:value-of select="addresses/address/country" /></td>
                <td><xsl:value-of select="email" /></td>
              </tr>
            </xsl:for-each>
          </table>
        </center>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
