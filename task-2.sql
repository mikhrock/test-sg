SELECT s.customer,
       date_trunc('week', i.invoice_date::date) AS weekly,
       SUM(s.revenue)
    FROM sales AS s
        JOIN invoices AS i
        ON s.invoice_id = i.invoice_id
    GROUP BY s.customer, weekly
      HAVING SUM(revenue) >= 100000.00
    ORDER BY weekly;