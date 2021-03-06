<section id="accessibility" class="section">
	<h1 class="title">Accessibility</h1>
	<h3 class="section-sub-title">ARIA Roles</h2>
	<table class="table table-bordered table-block table-responsive">
		<thead>
			<tr>
			<th scope="col">Role</th>
			<th scope="col">Description</th>
			<th scope="col" width="165">Analogous To</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>application</td>
				<td>A region declared as a web application, as opposed to a web document.</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>article</td>
				<td> A section of a page that consists of a composition that forms an independent part of a document, page, or site.</td>
				<td><code>&lt;article&gt;</code></td>
			</tr>
			<tr>
				<td>banner</td>
				<td>A region that contains mostly site-oriented content, rather than page-specific content.</td>
				<td><code>&lt;header&gt;</code>,<br/><code>&lt;div id="header"&gt;</code></td>
			</tr>
			<tr>
				<td>complementary</td>
				<td>A supporting section of the document, designed to be complementary to the main content at a similar level in the DOM hierarchy, but remains meaningful when separated from the main content.</td>
				<td><code>&lt;aside&gt;</code></td>
			</tr>
			<tr>
				<td>contentinfo</td>
				<td>A large perceivable region that contains information about the parent document.</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>directory</td>
				<td>A list of references to members of a group, such as a static table of contents.</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>document</td>
				<td>A region containing related information that is declared as document content, as opposed to a web application.</td>
				<td><code>&lt;body&gt;</code></td>
			</tr>
			<tr>
				<td>form</td>
				<td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a form. See related search</td>
				<td><code>&lt;form&gt;</code></td>
			</tr>
			<tr>
				<td>log</td>
				<td>A type of live region where new information is added in meaningful order and old information may disappear. See related marquee. Note: Elements with the role log have an implicit aria-live value of polite.</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>main</td>
				<td>The main content of a document.</td>
				<td><code>&lt;div id="content"&gt;</code></td>
			</tr>
			<tr>
				<td>navigation</td>
				<td>A collection of navigational elements (usually links) for navigating the document or related documents.</td>
				<td><code>&lt;nav&gt;</code></td>
			</tr>
			<tr>
				<td>note</td>
				<td>A section whose content is parenthetic or ancillary to the main content of the resource.</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>region</td>
				<td>A large perceivable section of a web page or document, that the author feels is important enough to be included in a page summary or table of contents, for example, an area of the page containing live sporting event statistics.</td>
				<td><code>&lt;div&gt;</code>, <code>&lt;frame&gt;</code>, <code>&lt;section&gt;</code></td>
			</tr>
			<tr>
				<td>search</td>
				<td>A landmark region that contains a collection of items and objects that, as a whole, combine to create a search facility. See related form.</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>status</td>
				<td>A container whose content is advisory information for the user but is not important enough to justify an alert, often but not necessarily presented as a status bar. See related alert. Note: Elements with the role status have an implicit <a href="http://www.w3.org/TR/wai-aria/states_and_properties#aria-live">aria-live</a> value of polite.</td>
				<td><code>&lt;output&gt;</code></td>
			</tr>
		</tbody>
	</table>
</section>