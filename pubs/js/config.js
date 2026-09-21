/* ===========================================================
   CONFIGURACIÓN — Hot Springs LLC
   -----------------------------------------------------------
   ⚠️ ACCIÓN REQUERIDA: reemplaza AMAZON_TAG por tu ID real de
   Afiliado de Amazon (Amazon Associates), ej: "hotsprings0d-20".
   Sin esto, los enlaces funcionan pero NO generan comisión.
   =========================================================== */
const AMAZON_TAG = "hotspringsllc-20";

/**
 * Construye un enlace de Amazon con el tag de afiliado.
 * - Si el producto tiene "asin", enlaza directo a esa ficha de producto.
 * - Si no, enlaza a resultados de búsqueda de Amazon con el nombre del
 *   producto (útil mientras completas los ASIN reales uno a uno).
 */
function buildAmazonLink(product){
  const tag = encodeURIComponent(AMAZON_TAG);
  if (product.asin && product.asin.trim() !== ""){
    return `https://www.amazon.com/dp/${encodeURIComponent(product.asin)}?tag=${tag}`;
  }
  const query = encodeURIComponent(product.name);
  return `https://www.amazon.com/s?k=${query}&tag=${tag}`;
}
