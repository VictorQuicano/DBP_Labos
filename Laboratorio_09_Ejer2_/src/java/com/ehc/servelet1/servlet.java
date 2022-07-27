/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package com.ehc.servelet1;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author Alejandro
 */
public class servlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try ( PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet servlet</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet servlet at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        System.out.println("Ejecutando GET");
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String nombre = request.getParameter("nombre");
        String nombre2 = request.getParameter("nombre2");
        String prim_ape = request.getParameter("prim_ape");
        String seg_ape = request.getParameter("seg_ape");
        int n = Integer.parseInt(request.getParameter("nume"));
        
        PrintWriter out = response.getWriter();
        out.println("<!DOCTYPE html>");
        out.println("<html>");
        out.println("<head>");
        out.println("<meta charset='UTF-8'>");
        out.println("<title>Formulario Registro de Clientes</title>");
        out.println("<link rel='stylesheet' href='css/Mi_Estilo.css'>");
        out.println("<meta name'viewport' content='width=device-width, initial-scale=1.0'>");
        out.println("</head>");
        out.println("<body>");
        out.println("<section id='seccionT'>");
        out.println("<h1>"+prim_ape+" "+seg_ape+", "+nombre+" "+nombre2+"</h1>");
        out.println("<div class='contieneT'>");
        out.println("<table id='tablaUsu' class ='tabla'>");
        out.println("<thead>");
        out.println("<tr>");
        out.println("<th>#</th>");
        for (int i=2;i<=20;i++){
            out.println("<th>"+n+"*"+i+"</th>");
        }
        out.println("</tr>");
        out.println("</thead>");
        out.println("<tbody>");
        for (int i=1;i<=n;i++){
            out.println("<tr><td id='cabe'>"+i+"</td>");
            for (int j=2;j<=20;j++){
                out.println("<td>"+j*i+"</td>");
            }
            out.println("</tr>");
        }
        out.println("</tbody>");
        out.println("</table>");
        out.println("</div>");
        out.println("</section>");
        out.println("</body>");
        out.println("</html>");
    }
}
