using System.IO;
using iText.Html2pdf;
using iText.Html2pdf.Resolver.Font;

namespace ResumeCSharp
{
    class Program
    {
        static void Main(string[] args)
        {
            var sourceHTML = "resume.html";
            var targetPDF = "Corbin_King_Resume.pdf";

            ConverterProperties properties = new ConverterProperties();
            var fontProvider = new DefaultFontProvider(false, false, true);
            properties.SetFontProvider(fontProvider);

            HtmlConverter.ConvertToPdf(new FileStream(sourceHTML, FileMode.Open), new FileStream(targetPDF, FileMode.Create), properties);
        }
    }
}
